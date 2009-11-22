
// Shindig Data Model

CREATE TABLE `posts` (
  `id` int(11) NOT NULL auto_increment,
  `post_content` text,
  `post_excerpt` text,
  `title` text NOT NULL,
  `status` varchar(32) NOT NULL default 'publish',
  `slug` varchar(200) NOT NULL,
  `created_on` int(12) default NULL,
  `updated_on` int(12) default NULL,
  `type` varchar(20) NOT NULL default 'post',
  `author` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

CREATE TABLE `posts_tags` (
  `shindig_post_id` int(11) default NULL,
  `shindig_tag_id` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tags` (
  `id` int(11) NOT NULL auto_increment,
  `tag` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `widgets` (
  `id` int(11) default NULL,
  `route` varchar(50) NOT NULL,
  `uri` text,
  `sidebar` varchar(50) NOT NULL default 'default'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
