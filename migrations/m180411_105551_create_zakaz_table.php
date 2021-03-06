<?php

use yii\db\Migration;

/**
 * Handles the creation of table `zakaz`.
 */
class m180411_105551_create_zakaz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('zakaz', [
            'id' => $this->primaryKey(),
            'rental_id' => $this->integer(),
            'user_phone' => $this->string(),
            'garage_id' => $this->integer(),
            'date_for' => $this->date(),
            'date_to' => $this->date(),
            'curr_date' => 'timestamp on update current_timestamp',
            'price' => $this->integer(),
            'pay_id' => $this->integer(),
            'region_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-zakaz-rental-id',
            'zakaz',
            'rental_id'
        );
        $this->createIndex(
            'idx-zakaz-garage-id',
            'zakaz',
            'garage_id'
        );
        $this->createIndex(
            'idx-zakaz-pay-id',
            'zakaz',
            'pay_id'
        );
        $this->createIndex(
            'idx-zakaz-region-id',
            'zakaz',
            'region_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('zakaz');
    }
}
