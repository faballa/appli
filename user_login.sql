CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `user_login` (`id`, `name`, `username`, `password`) VALUES
(1, 'Sachin Tendulkar', 'sico', '123456'),
(2, 'Sourav Ganguly', 'sourav', '456789');
