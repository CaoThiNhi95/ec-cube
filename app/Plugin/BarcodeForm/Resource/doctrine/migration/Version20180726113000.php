<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\SchemaTool;
use Eccube\Common\Constant;

class Version20180726113000 extends AbstractMigration
{
	//対象のEntityを指定
	protected $entities = array(
		'Plugin\BarcodeForm\Entity\BarcodeForm'
	);

	/**
     * インストール時処理
     * @param Schema $schema
     * @return bool
     * @throws \Doctrine\ORM\Tools\ToolsException
     */
	public function up(Schema $schema)
	{
		//テーブルの生成
        $app = \Eccube\Application::getInstance();
        $meta = $this->getMetadata($app['orm.em']);
        $tool = new SchemaTool($app['orm.em']);
        $tool->createSchema($meta);
	}

    /**
     * アンインストール時処理
     * @param Schema $schema
     * @throws \Doctrine\ORM\Tools\ToolsException
     */
	public function down(Schema $schema)
	{
		$app = \Eccube\Application::getInstance();
        $meta = $this->getMetadata($app['orm.em']);

        $tool = new SchemaTool($app['orm.em']);
        $schemaFromMetadata = $tool->getSchemaFromMetadata($meta);

        // テーブル削除
        foreach ($schemaFromMetadata->getTables() as $table) {
            if ($schema->hasTable($table->getName())) {
                $schema->dropTable($table->getName());
            }
        }

        // シーケンス削除
        foreach ($schemaFromMetadata->getSequences() as $sequence) {
            if ($schema->hasSequence($sequence->getName())) {
                $schema->dropSequence($sequence->getName());
            }
        }
	}

    /**
     * メタデータ取得
     * @param EntityManager $em
     */
    protected function getMetadata(EntityManager $em)
    {
        $meta = array();
        foreach ($this->entities as $entity) {
            $meta[] = $em->getMetadataFactory()->getMetadataFor($entity);
        }

        return $meta;
    }
}