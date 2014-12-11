--
-- Install script SQL database
--
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL DEFAULT 'default@bruktbok.net',
  `rank` int(11) unsigned NOT NULL DEFAULT '1',
  `account_created` varchar(50) NOT NULL,
  `last_online` varchar(30) NOT NULL,
  `online` enum('0','1') NOT NULL DEFAULT '0',
  `ip_last` varchar(120) NOT NULL,
  `ip_reg` varchar(120) NOT NULL,
  `auth_ticket` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ip_last` (`ip_last`),
  KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=275137 ;

CREATE TABLE IF NOT EXISTS `user_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `tag` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;