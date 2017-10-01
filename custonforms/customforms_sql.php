<?php exit;?>
CREATE TABLE IF NOT EXISTS `customform` (
  `customform_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pageinfo` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `submitmessage` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `submitlink` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `specialform` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`customform_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `customform_components` (
  `component_id` int(11) NOT NULL AUTO_INCREMENT,
  `customform_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `componenttype` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `required` int(11) NOT NULL,
  `tooltip` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `sortnum` int(11) NOT NULL,
  PRIMARY KEY (`component_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `customform_selectvalues` (
  `selectvalue_id` int(11) NOT NULL AUTO_INCREMENT,
  `component_id` int(11) NOT NULL,
  `componentvalue` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `sortnum` int(11) NOT NULL,
  PRIMARY KEY (`selectvalue_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `customform_submission` (
  `submission_id` int(11) NOT NULL AUTO_INCREMENT,
  `customform_id` int(11) NOT NULL,
  `submitdate` int(11) NOT NULL,
  `ipaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seenstatus` int(11) NOT NULL,
  PRIMARY KEY (`submission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `customform_values` (
  `value_id` int(11) NOT NULL AUTO_INCREMENT,
  `submission_id` int(11) NOT NULL,
  `component_id` int(11) NOT NULL,
  `formvalue` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
