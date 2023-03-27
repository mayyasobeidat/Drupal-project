<?php

namespace Drupal\logintoboggan\Form;

use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Configure search settings for this site.
 */
class LogintobogganSettingsForm extends ConfigFormBase {

  /**
   * The module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * LogintobogganSettingsForm constructor.
   */
  public function __construct(ConfigFactoryInterface $config_factory, ModuleHandlerInterface $module_handler) {
    parent::__construct($config_factory);
    $this->moduleHandler = $module_handler;
  }

  /**
   * Create used to make config and module info available within class.
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'logintoboggan_main_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'logintoboggan.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $config = $this->config('logintoboggan.settings');

    $form['login'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Log in'),
    ];
    $form['login']['login_with_email'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Allow users to login using their email address'),
      '#default_value' => $config->get('login_with_email'),
      '#description' => $this->t('Users will be able to enter EITHER their username OR their email address to log in.'),
    ];
    $form['login']['unified_login'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Present a unified login/registration page'),
      '#default_value' => $config->get('unified_login'),
      '#description' => $this->t("Use one page for both login and registration instead of Drupal's tabbed login/registration/password pages."),
    ];
    $form['registration'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Registration'),
    ];
    $form['registration']['confirm_email_at_registration'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Use two email fields on registration form'),
      '#default_value' => $config->get('confirm_email_at_registration'),
      '#description' => $this->t("User will have to type the same email 
      address into both fields. This helps to confirm that they've typed the 
      correct address."),
    ];

    if ($this->moduleHandler->moduleExists('help')) {
      $help_text = $this->t('More help in writing the email message 
      can be found at <a href="@help">LoginToboggan help</a>.',
        ['@help' => '/admin/help/logintoboggan']);
    }
    else {
      $help_text = '';
    }

    $form['registration']['user_email_verification'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Set password'),
      '#default_value' => !$this->configFactory->get('user.settings')->get('verify_mail'),
      '#description' => $this->t('This will allow users to choose their initial password when registering 
        (note that this setting is a mirror of the <a href=":settings">Require
         email verification when a visitor creates an account</a> setting, 
        and is merely here for convenience). The benefit of doing this is users 
        can login immediately. The downside is that you  have logged-in
        users that have not yet confirmed a valid email address. If you are 
        doing this, we recommend that you give authenticated users 
        limited permissions, and you give more 
        permissions to a trusted role will be assigned once the validation 
        email link is used. If you initially allow password setting
         on registration, but change this later, we recommend you reset the 
         trusted role back to authenticated user because the role no longer 
         has any purpose. <br />NOTE: If you enable this feature, you need to 
         edit the <a href=":settings">Welcome (no approval required)</a> text. ',
          [':settings' => Url::fromRoute('entity.user.admin_form')->toString()]) . $help_text,
    ];

    $roles = user_role_names(TRUE);
    $form['registration']['trusted_role'] = [
      '#type' => 'select',
      '#title' => $this->t('Trusted role'),
      '#options' => $roles,
      '#default_value' => $config->get('trusted_role'),
      '#description' => $this->t('If "Set password" is selected, users will
         be able to login before their email address has been confirmed. Also, the user will automatically be
         assigned Drupal\'s "authenticated user" role. If you want to restrict permissions for new users until they validate their email, 
         create a new role for a trusted user that has more permissions than a basic authenticated user. When a new user sends a verification email, the user will be assigned the new role.
         <br>
         <strong>WARNING: changing this setting after initial site setup can cause undesirable results, including unintended deletion of users -- change with extreme caution!</strong>', [':url' => Url::fromRoute('entity.user_role.collection')->toString()]),
      '#states' => [
        // Hide the settings when the cancel notify checkbox is disabled.
        'invisible' => [
          ':input[name="user_email_verification"]' => ['checked' => FALSE],
        ],
      ],
    ];

    $purge_options = [
      0 => $this->t('Never delete'),
      86400 => $this->t('1 Day'),
      172800 => $this->t('2 Days'),
      259200 => $this->t('3 Days'),
      345600 => $this->t('4 Days'),
      432000 => $this->t('5 Days'),
      518400 => $this->t('6 Days'),
      604800 => $this->t('1 Week'),
      1209600 => $this->t('2 Weeks'),
      2592000 => $this->t('1 Month'),
      7776000 => $this->t('3 Months'),
      15379200 => $this->t('6 Months'),
      30758400 => $this->t('1 Year'),
    ];

    $form['registration']['purge_unvalidated_user_interval'] = [
      '#type' => 'select',
      '#title' => $this->t('Delete unvalidated users after'),
      '#options' => $purge_options,
      '#default_value' => $config->get('purge_unvalidated_user_interval'),
      '#description' => $this->t("If enabled, users that do not have the trusted role
         set above will be deleted automatically from the system, if the set time interval
          since their initial account creation has passed. This can be used to automatically purge spambot registrations.
           Note: this requires cron, and also requires that the 'Set password' option above is enabled. Bear in mind this can delete
           valid users who have not validated by email so make sure you provide guidance about how to make a validation request. 
           <strong>WARNING: changing this setting after initial site setup can cause undesirable results, including unintended deletion of users -- change with extreme caution! (please read the CAVEATS section of INSTALL.txt for important information on configuring this feature)</strong>"),
      '#states' => [
        // Hide the settings when the cancel notify checkbox is disabled.
        'invisible' => [
          ':input[name="user_email_verification"]' => ['checked' => FALSE],
        ],
      ],
    ];

    $form['registration']['immediate_login_on_register'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Immediate login'),
      '#default_value' => $config->get('immediate_login_on_register'),
      '#description' => $this->t("If set, the user will be logged in immediately after registering.
       Note this only applies if the 'Set password' option above is enabled. 
       It also assumes that the site allows vistors to register without approval."),
      '#states' => [
        // Hide the settings when the cancel notify checkbox is disabled.
        'invisible' => [
          ':input[name="user_email_verification"]' => ['checked' => FALSE],
        ],
      ],
    ];

    $form['registration']['redirect'] = [
      '#type' => 'details',
      '#title' => $this->t('Redirections'),
      '#collapsed' => FALSE,
    ];

    $form['registration']['redirect']['redirect_on_register'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Redirect path on registration'),
      '#default_value' => $config->get('redirect_on_register'),
      '#description' => $this->t("Normally, after a user registers a new account, 
         they will be taken to the front page, or to their user page if you 
         specify <cite>Immediate login</cite> above. 
         Leave this setting blank if you wish to keep the default behavior. 
         If you wish the user to go to a page of your choosing, 
         then enter the path for it here. For instance, you may redirect them 
         to a static page such as <cite>/node/35</cite>, 
         or to the <cite>&lt;front&gt;</cite> page. You may also use <em>%uid</em> 
         as a variable, and the user's user ID will 
         be substituted in the path."),
    ];
    $form['registration']['redirect']['redirect_on_confirm'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Redirect path on confirmation'),
      '#default_value' => $config->get('redirect_on_confirm'),
      '#description' => $this->t('Normally, after a user confirms their new account, they will be taken to their user page. 
        Leave this setting blank if you wish to keep the default behavior. If you wish the user to go to a page of your choosing, 
        then enter the path for it here. For instance, you may redirect them to a static page such as <cite>/node/35</cite>, or 
        to the <cite>&lt;front&gt;</cite> page. You may also use <em>%uid</em> as a variable, and the user\'s user ID will be 
        substituted in the path. In the case where users are not creating their own passwords, it is suggested to use 
        <cite>user/%uid/edit</cite> here, so the user may set their password immediately after validating their account.'),
    ];
    $form['registration']['redirect']['override_destination_parameter'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Override destination parameter'),
      '#default_value' => $config->get('override_destination_parameter'),
      '#description' => $this->t("Normally, when a Drupal redirect is performed, priority is given to the 'destination' 
        parameter from the originating URL. With this setting enabled, LoginToboggan will attempt to override this behavior with any 
        values set above."),
    ];
    $form['other'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Other'),
      '#tree' => FALSE,
    ];
    $form['other']['site_403'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Present login form on access denied (403)'),
      '#default_value' => $config->get('site_403'),
      '#description' => $this->t('Anonymous users will be presented with
       a login form along with an access denied message.'),
    ];
    $form['other']['login_successful_message'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Display login successful message'),
      '#default_value' => $config->get('login_successful_message'),
      '#description' => $this->t("If enabled, users will receive a 'Log 
      in successful' message upon login."),
    ];
    $min_pass_options = [$this->t('None')];
    for ($i = 2; $i < 30; $i++) {
      $min_pass_options[$i] = $i;
    }
    $form['other']['minimum_password_length'] = [
      '#type' => 'select',
      '#title' => $this->t('Minimum password length'),
      '#options' => $min_pass_options,
      '#default_value' => $config->get('minimum_password_length'),
      '#description' => $this->t("LoginToboggan automatically performs 
      basic password validation for illegal characters. If you would 
      additionally like to have a minimum password length requirement, select 
      the length here, or set to 'None' for no password length validation."),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    if ($this->config('user.settings')->get('register') != 'visitors' && $form_state->getValue('immediate_login_on_register') == '1') {
      $form_state->setErrorByName('immediate_login_on_register', $this->t('The main account settings do
       not allow visitors to register without admin approval but Logintoboggan is set for immediate login. 
       You must switch to visitor registration to use immediate login'));
    }
    $redirect_register = $form_state->getValue('redirect_on_register');
    if (!empty($redirect_register) && substr($redirect_register, 0, 1) != '/') {
      $form_state->setErrorByName('redirect_on_register', $this->t('redirects must start with a forward slash: e.g. / or /node/1'));
    }
    $redirect_confirm = $form_state->getValue('redirect_on_confirm');
    if (!empty($redirect_confirm) && substr($redirect_confirm, 0, 1) != '/') {
      $form_state->setErrorByName('redirect_on_confirm', $this->t('redirects must start with a forward slash: e.g. / or  /node/1'));
    }

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $config = $this->config('logintoboggan.settings');
    foreach ($form_state->getValues() as $key => $value) {
      if (!in_array($key,
        ['submit', 'form_build_id', 'form_token', 'form_id', 'op']
      )) {
        if ($key == 'user_email_verification') {
          $userconfig = $this->configFactory()->getEditable('user.settings');
          $userconfig->set('verify_mail', !$form_state->getValue('user_email_verification'));
          $userconfig->save();

        }
        if ($key == 'site_403') {
          $site_config = $this->configFactory()->getEditable('system.site');
          $site_config->set('page.403', ($value == 0) ? '' : '/toboggan/denied');
          $site_config->save();
        }
        $config->set($key, $value);
      }
    }
    $config->save();
    if ($form['login']['unified_login']['#default_value'] != $form['login']['unified_login']['#value']) {
      $this->messenger()->addMessage($this->t('Unified login setting was changed, menus have been rebuilt.'));
      // A regular menu_rebuild() still leaves the old callbacks
      // cached -- doing it in a shutdown function seems to correct that issue.
      drupal_register_shutdown_function('menu_rebuild');
    }
  }

}
