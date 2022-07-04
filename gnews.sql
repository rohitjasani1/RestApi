
CREATE TABLE IF NOT EXISTS `employee` (
  `Employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `Salary` double(10,2) DEFAULT NULL,
  `Joining_date` date DEFAULT NULL,
  `Departement` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO `employee` (`Employee_id`, `First_name`, `Last_name`, `Salary`, `Joining_date`, `Departement`, `created_at`, `updated_at`) VALUES
(1, 'Bob', 'Kinto', 1000000.00, '2019-01-20', 'Finance', '2022-01-18 13:31:53', '2022-01-18 13:31:53'),
(2, 'Jerry', 'Kansxo', 6000000.00, '2019-01-15', 'IT', '2022-01-18 13:31:53', '2022-01-18 13:31:53'),
(3, 'Philip', 'Jose', 8900000.00, '2019-02-05', 'Banking', '2022-01-18 13:32:49', '2022-01-18 13:32:49'),
(4, 'John', 'Abraham', 2000000.00, '2019-02-25', 'Insurance', '2022-01-18 13:32:49', '2022-01-18 13:32:49'),
(5, 'Michael', 'Mathew', 2200000.00, '2019-02-28', 'Finance', '2022-01-18 13:33:37', '2022-01-18 13:33:37'),
(6, 'Alex', 'chreketo', 4000000.00, '2019-05-10', 'IT', '2022-01-18 13:33:37', '2022-01-18 13:33:37'),
(7, 'Yohan', 'Soso', 1230000.00, '2019-06-20', 'Banking', '2022-01-18 13:34:02', '2022-01-18 13:34:02');




CREATE TABLE IF NOT EXISTS `reward` (
  `Employee_ref_id` int(11) DEFAULT NULL,
  `date_reward` date DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `reward` (`Employee_ref_id`, `date_reward`, `amount`) VALUES
(1, '2019-05-11', 1000.00),
(2, '2019-02-15', 5000.00),
(3, '2019-04-22', 2000.00),
(1, '2019-06-20', 8000.00);



Problems : 

1. Output all employee names whose FIRST NAME ends with letter N
A : select * from `employee` where substr(First_name, -1) = 'n'

2.Output Details of all Employees who get rewards below 5100 
A select * from `reward` as `r` left join `employee` as `e` on `r`.`Employee_ref_id` = `e`.`Employee_id` where `r`.`amount` < 5100
  
3.Output details of all employees who joined on or before 25th Feb, 2019
A. SELECT * FROM `employee` WHERE `Joining_date` <= '2019-02-25'


