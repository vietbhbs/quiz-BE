<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221216033354 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Initial first Database';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        /*User table*/
        $users = $schema->createTable('users');

        $users->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $users->addColumn('name', Types::STRING);
        $users->addColumn('email', Types::STRING);
        $users->addColumn('password', Types::STRING);
        $users->addColumn('avatar', Types::STRING);
        $users->addColumn('roleId', Types::INTEGER);
        $users->addColumn('created_at', Types::DATE_MUTABLE);
        $users->addColumn('update_at', Types::DATE_MUTABLE);
        $users->setPrimaryKey(['id']);

        /*Role table*/
        $roles = $schema->createTable('roles');

        $roles->addColumn('id', Types::STRING);
        $roles->addColumn('name', Types::STRING);

        $roles->setPrimaryKey(['id']);

        /*Rate table*/
        $rates = $schema->createTable('rates');

        $rates->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $rates->addColumn('subTopicId', Types::INTEGER);
        $rates->addColumn('userId', Types::INTEGER);
        $rates->addColumn('pointVotes', Types::INTEGER);

        $rates->setPrimaryKey(['id']);

        /*Subtopic table*/
        $subTopic = $schema->createTable('subTopics');

        $subTopic->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $subTopic->addColumn('title', Types::TEXT);
        $subTopic->addColumn('content', Types::TEXT);
        $subTopic->addColumn('points', Types::FLOAT);
        $subTopic->addColumn('code', Types::STRING);

        $subTopic->setPrimaryKey(['id']);

        /*Tests table*/
        $tests = $schema->createTable('tests');

        $tests->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $tests->addColumn('userId', Types::INTEGER);
        $tests->addColumn('subTopicId', Types::INTEGER);
        $tests->addColumn('score', Types::FLOAT);

        $tests->setPrimaryKey(['id']);

        /*Questions table*/
        $questions = $schema->createTable('questions');

        $questions->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $questions->addColumn('title', Types::TEXT);
        $questions->addColumn('content', Types::TEXT);
        $questions->addColumn('subTopicId', Types::INTEGER);
        $questions->addColumn('point', Types::FLOAT);
        $questions->addColumn('times', Types::FLOAT)->setComment('times in minutes');

        $questions->setPrimaryKey(['id']);

        /*Answers table*/
        $answers = $schema->createTable('answers');

        $answers->addColumn('id', Types::INTEGER)->setAutoincrement(true);
        $answers->addColumn('content', Types::TEXT);
        $answers->addColumn('questionId', Types::INTEGER);
        $answers->addColumn('correct', Types::BOOLEAN);

        $answers->setPrimaryKey(['id']);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('users');
        $schema->dropTable('roles');
        $schema->dropTable('rates');
        $schema->dropTable('subTopics');
        $schema->dropTable('tests');
        $schema->dropTable('questions');
        $schema->dropTable('answers');
    }
}
