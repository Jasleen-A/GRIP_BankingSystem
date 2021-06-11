
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE main.`transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for table `users`

CREATE TABLE main.`users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Ramesh', 'r@gmail.com', 50000),
(2, 'Kanan', 'kas@gmail.com', 30000),
(3, 'Sheena', 'sheena@gmail.com', 40000),
(4, 'rajesh', 'raj@gmail.com', 50000),
(5, 'Shubham', 'sk@gmail.com', 40000),
(6, 'Ranveer', 'ranveer@gmail.com', 30000),
(7, 'Dr.Prasad', 'DR@gmail.com', 50000),
(8, 'Joy', 'joy@gmail.com', 40000),
(9, 'rohan', 'advani@gmail.com', 30000),
(10, 'Tanveer', 'tanvi1233@gmail.com', 50000);


-- Indexes for table `transaction`
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);
-- Indexes for table `users`
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `transaction`

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

