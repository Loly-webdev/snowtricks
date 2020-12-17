<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217194926 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C19D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_64C19C19D86650F ON category (user_id_id)');
        $this->addSql('ALTER TABLE comment ADD user_id_id INT DEFAULT NULL, ADD tricks_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA674A03E FOREIGN KEY (tricks_id_id) REFERENCES tricks (id)');
        $this->addSql('CREATE INDEX IDX_9474526C9D86650F ON comment (user_id_id)');
        $this->addSql('CREATE INDEX IDX_9474526CA674A03E ON comment (tricks_id_id)');
        $this->addSql('ALTER TABLE picture ADD user_id_id INT DEFAULT NULL, ADD tricks_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F899D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F89A674A03E FOREIGN KEY (tricks_id_id) REFERENCES tricks (id)');
        $this->addSql('CREATE INDEX IDX_16DB4F899D86650F ON picture (user_id_id)');
        $this->addSql('CREATE INDEX IDX_16DB4F89A674A03E ON picture (tricks_id_id)');
        $this->addSql('ALTER TABLE tricks ADD category_id_id INT DEFAULT NULL, ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tricks ADD CONSTRAINT FK_E1D902C19777D11E FOREIGN KEY (category_id_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE tricks ADD CONSTRAINT FK_E1D902C19D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E1D902C19777D11E ON tricks (category_id_id)');
        $this->addSql('CREATE INDEX IDX_E1D902C19D86650F ON tricks (user_id_id)');
        $this->addSql('ALTER TABLE user ADD category_id INT DEFAULT NULL, ADD comment_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64912469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64912469DE2 ON user (category_id)');
        $this->addSql('CREATE INDEX IDX_8D93D649F8697D13 ON user (comment_id)');
        $this->addSql('ALTER TABLE video ADD user_id_id INT DEFAULT NULL, ADD tricks_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2CA674A03E FOREIGN KEY (tricks_id_id) REFERENCES tricks (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C9D86650F ON video (user_id_id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2CA674A03E ON video (tricks_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C19D86650F');
        $this->addSql('DROP INDEX IDX_64C19C19D86650F ON category');
        $this->addSql('ALTER TABLE category DROP user_id_id');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C9D86650F');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA674A03E');
        $this->addSql('DROP INDEX IDX_9474526C9D86650F ON comment');
        $this->addSql('DROP INDEX IDX_9474526CA674A03E ON comment');
        $this->addSql('ALTER TABLE comment DROP user_id_id, DROP tricks_id_id');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F899D86650F');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F89A674A03E');
        $this->addSql('DROP INDEX IDX_16DB4F899D86650F ON picture');
        $this->addSql('DROP INDEX IDX_16DB4F89A674A03E ON picture');
        $this->addSql('ALTER TABLE picture DROP user_id_id, DROP tricks_id_id');
        $this->addSql('ALTER TABLE tricks DROP FOREIGN KEY FK_E1D902C19777D11E');
        $this->addSql('ALTER TABLE tricks DROP FOREIGN KEY FK_E1D902C19D86650F');
        $this->addSql('DROP INDEX IDX_E1D902C19777D11E ON tricks');
        $this->addSql('DROP INDEX IDX_E1D902C19D86650F ON tricks');
        $this->addSql('ALTER TABLE tricks DROP category_id_id, DROP user_id_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64912469DE2');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F8697D13');
        $this->addSql('DROP INDEX IDX_8D93D64912469DE2 ON user');
        $this->addSql('DROP INDEX IDX_8D93D649F8697D13 ON user');
        $this->addSql('ALTER TABLE user DROP category_id, DROP comment_id');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C9D86650F');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2CA674A03E');
        $this->addSql('DROP INDEX IDX_7CC7DA2C9D86650F ON video');
        $this->addSql('DROP INDEX IDX_7CC7DA2CA674A03E ON video');
        $this->addSql('ALTER TABLE video DROP user_id_id, DROP tricks_id_id');
    }
}
