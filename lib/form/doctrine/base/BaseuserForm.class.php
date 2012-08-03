<?php

/**
 * user form base class.
 *
 * @method user getObject() Returns the current form's model object
 *
 * @package    connect
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseuserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user_name'  => new sfWidgetFormInputText(),
      'show_name'  => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'address'    => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'twitter'    => new sfWidgetFormInputText(),
      'mixi'       => new sfWidgetFormInputText(),
      'facebook'   => new sfWidgetFormInputText(),
      'google'     => new sfWidgetFormInputText(),
      'last_login' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_name'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'show_name'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'password'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'address'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'twitter'    => new sfValidatorInteger(array('required' => false)),
      'mixi'       => new sfValidatorInteger(array('required' => false)),
      'facebook'   => new sfValidatorInteger(array('required' => false)),
      'google'     => new sfValidatorInteger(array('required' => false)),
      'last_login' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'user';
  }

}
