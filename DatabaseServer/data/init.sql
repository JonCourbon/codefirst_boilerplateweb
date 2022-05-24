CREATE TABLE acteur(
   id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50) NOT NULL,
   prenom VARCHAR(50) NOT NULL
) ENGINE = 'InnoDB';

INSERT INTO `acteur` (`id`, `nom`, `prenom`) VALUES (NULL, 'Bacri', 'Pierre'), (NULL, 'Chabat', 'Alain');
