--usersテーブル
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--tweetテーブル
CREATE TABLE `tweet` (
  `id` int(11) NOT NULL,
  `tweet_id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--トレーニングメニューテーブル
CREATE TABLE `trainingmenu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `num` varchar(1000) DEFAULT NULL,
  `setnum` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--いいねテーブル
CREATE TABLE `good` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `tweet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--followテーブル
CREATE TABLE `follow` (
  `following_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--commentテーブル
CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tweet_id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;