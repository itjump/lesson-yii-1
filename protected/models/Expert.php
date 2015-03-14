<?php

/**
 * This is the model class for table "expert".
 *
 * The followings are the available columns in table 'expert':
 * @property integer $id
 * @property string $name
 * @property string $avatar
 * @property integer $rating
 * @property string $status
 * @property string $skills
 * @property string $description
 * @property string $deleted
 */
class Expert extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, rating', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('avatar, deleted', 'length', 'max'=>255),
			array('status', 'length', 'max'=>6),
			array('skills, description', 'length', 'max'=>1000),
            array('avatar', 'file',
                'types'=>'jpg, gif, png',
                'maxSize'=>1024 * 1024 * 5, // 5 MB
                'allowEmpty'=>'true',
                'tooLarge'=>'Файл весит больше 5 MB. Пожалуйста, загрузите файл меньшего размера.',
            ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, avatar, rating, status, skills, description, deleted', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя',
			'avatar' => 'Аватар',
			'rating' => 'Рейтинг',
			'status' => 'Статус',
			'skills' => 'Интересы',
			'description' => 'Описание',
			'deleted' => 'Deleted',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('skills',$this->skills,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('deleted',$this->deleted,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expert the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function save()
    {
        if(isset($_POST['Expert'])){
            $this->avatar = CUploadedFile::getInstance($this, 'avatar');
            if($this->avatar){
                $path = Yii::getPathOfAlias('webroot') . '/upload/' . $this->avatar->getName();
                $this->avatar->saveAs($path);
            }
        }
        return parent::save();
    }
}
