SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `workwithus` (
  `id` int(11) NOT NULL,
 
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `workwithus`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `workwithus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

