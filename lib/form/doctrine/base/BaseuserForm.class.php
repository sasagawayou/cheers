<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    connect
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'name'                     => new sfWidgetFormInputText(),
      'image'                    => new sfWidgetFormTextarea(),
      'address'                  => new sfWidgetFormInputText(),
      'email'                    => new sfWidgetFormInputText(),
      'twitter'                  => new sfWidgetFormInputText(),
      'mixi'                     => new sfWidgetFormInputText(),
      'facebook'                 => new sfWidgetFormInputText(),
      'google'                   => new sfWidgetFormInputText(),
      'last_login'               => new sfWidgetFormDateTime(),
      'hybridauth_provider_name' => new sfWidgetFormInputText(),
      'hybridauth_provider_uid'  => new sfWidgetFormInputText(),
      'created_at'               => new sfWidgetFormDateTime(),
      'updated_at'               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'                    => new sfValidatorString(array('required' => false)),
      'address'                  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'email'                    => new sfValidatorPass(array('required' => false)),
      'twitter'                  => new sfValidatorInteger(array('required' => false)),
      'mixi'                     => new sfValidatorInteger(array('required' => false)),
      'facebook'                 => new sfValidatorInteger(array('required' => false)),
      'google'                   => new sfValidatorInteger(array('required' => false)),
      'last_login'               => new sfValidatorDateTime(array('required' => false)),
      'hybridauth_provider_name' => new sfValidatorString(array('max_length' => 20)),
      'hybridauth_provider_uid'  => new sfValidatorString(array('max_length' => 255)),
      'created_at'               => new sfValidatorDateTime(),
      'updated_at'               => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
