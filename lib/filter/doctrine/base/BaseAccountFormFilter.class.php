<?php

/**
 * Account filter form base class.
 *
 * @package    connect
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAccountFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_name'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'show_name'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address'    => new sfWidgetFormFilterInput(),
      'email'      => new sfWidgetFormFilterInput(),
      'twitter'    => new sfWidgetFormFilterInput(),
      'mixi'       => new sfWidgetFormFilterInput(),
      'facebook'   => new sfWidgetFormFilterInput(),
      'google'     => new sfWidgetFormFilterInput(),
      'last_login' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_name'  => new sfValidatorPass(array('required' => false)),
      'show_name'  => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'address'    => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'twitter'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mixi'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'facebook'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'google'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'last_login' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('account_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Account';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'user_name'  => 'Text',
      'show_name'  => 'Text',
      'password'   => 'Text',
      'address'    => 'Text',
      'email'      => 'Text',
      'twitter'    => 'Number',
      'mixi'       => 'Number',
      'facebook'   => 'Number',
      'google'     => 'Number',
      'last_login' => 'Date',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
