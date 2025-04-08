<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250404145304 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_signalement ON reponse
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse CHANGE reponse reponse LONGTEXT DEFAULT NULL, CHANGE date_reponse date_reponse DATETIME DEFAULT NULL, CHANGE statut statut VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation MODIFY idReservation INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `primary` ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation CHANGE date_Reservation date_reservation VARCHAR(255) NOT NULL, CHANGE marque marque VARCHAR(255) NOT NULL, CHANGE idReservation id_reservation INT AUTO_INCREMENT NOT NULL, CHANGE numPLACE num_place INT NOT NULL, CHANGE idStation id_station INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD PRIMARY KEY (id_reservation)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE signalement CHANGE type_signalement type_signalement VARCHAR(255) NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE date_signalement date_signalement DATETIME DEFAULT NULL, CHANGE statut statut VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE station ADD nom_station VARCHAR(255) NOT NULL, DROP nomStation, CHANGE zone zone VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(255) NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse CHANGE reponse reponse TEXT DEFAULT NULL, CHANGE date_reponse date_reponse DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE statut statut ENUM('En attente', 'En cours', 'Résolu') DEFAULT 'En attente'
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_signalement ON reponse (id_signalement)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation MODIFY id_reservation INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation CHANGE date_reservation date_Reservation VARCHAR(25) NOT NULL, CHANGE marque marque VARCHAR(30) NOT NULL, CHANGE id_reservation idReservation INT AUTO_INCREMENT NOT NULL, CHANGE num_place numPLACE INT NOT NULL, CHANGE id_station idStation INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD PRIMARY KEY (idReservation)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE signalement CHANGE type_signalement type_signalement VARCHAR(100) NOT NULL, CHANGE description description TEXT NOT NULL, CHANGE date_signalement date_signalement DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE statut statut VARCHAR(50) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE station ADD nomStation VARCHAR(25) NOT NULL, DROP nom_station, CHANGE zone zone VARCHAR(25) NOT NULL, CHANGE status status VARCHAR(20) NOT NULL
        SQL);
    }
}
