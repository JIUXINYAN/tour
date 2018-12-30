#############用户表：
CREATE TABLE info (
  id int unsigned auto_increment,
  acc varchar(50) not null default '' COMMENT '帐号',
  sex tinyint not null default 0 COMMENT '性别:0:男1：女',  
  nickname varchar(30) not null default '' COMMENT '昵称',
  pwd char(32) not null default '' COMMENT '密码',
  headimg varchar(255) not null default '' COMMENT '头像',
  time int unsigned default 0 COMMENT '注册时间',
  own_intro varchar(255) not null default '' comment '个人简介',
  type tinyint unsigned not null default 0 COMMENT '用户类型 0:普通用户 1:管理员',
  PRIMARY KEY (id)
) ENGINE=MyISAM CHARSET=utf8;

#############博客文章表：
CREATE TABLE tour_article (
  id int unsigned AUTO_INCREMENT,
  title varchar(100) not null default '' COMMENT '文章标题',
  intro varchar(255) not null default '' COMMENT '文章简介',
  content text not null COMMENT '文章内容',
  pubtime int unsigned not null default 0 COMMENT '发布时间',
  user_id int unsigned not null default 0 COMMENT '发布用户id',
  user_nickname varchar(30) not null default '' COMMENT '发布用户昵称',
  comment_num smallint unsigned not null default 0 COMMENT '评论数量',
  picture varchar(255) not null default '' comment '文章配图',
  PRIMARY KEY (id)
) ENGINE=MyISAM CHARSET=utf8;


#############评论表：
CREATE TABLE tour_comment (
  id int unsigned AUTO_INCREMENT,
  content text not null COMMENT '评论内容', 
  post_date int unsigned not null default 0 COMMENT '评论时间',
  article_id int unsigned not null default 0 COMMENT '所属文章ID',
  article_title varchar(50)  not null default '' COMMENT '所属文章标题',
  user_id int unsigned not null default 0 COMMENT '评论用户ID',
  user_nickname varchar(30)  not null default '' COMMENT '评论用户昵称',
  PRIMARY KEY (id)
) ENGINE=MyISAM CHARSET=utf8;

#############反馈表：
CREATE TABLE info (
  id int unsigned AUTO_INCREMENT,
  content text not null COMMENT '反馈内容',
  time int unsigned not null default 0 COMMENT '反馈时间',
  user_id int unsigned not null default 0 COMMENT '反馈用户ID',
  user_nickname varchar(30)  not null default '' COMMENT '反馈用户昵称',
  PRIMARY KEY (id)
) ENGINE=MyISAM CHARSET=utf8;

############图片表
create table tour_photo(
id int primary key AUTO_INCREMENT,
intro varchar(255) not null default '' COMMENT '图片描述',
picture varchar(255) not null default '' comment '图片路径',
user_id int unsigned not null default 0 COMMENT '用户id',
user_nickname varchar(30)  not null default '' COMMENT '用户昵称'
)engine=MyISAM charset=utf8;


insert into tour_article (title,intro,content,pubtime,user_id,user_nickname) values ('Jay','可爱女人','想要有直升机
想要和你飞到宇宙去
',1231242,1,'张三');


insert into tour_article (title,intro,content,pubtime,user_id,user_nickname) values ('Jay','完美主义','如果说怀疑 可以造句
如果说分离 能够翻译
',1231242,1,'李四');

insert into tour_article (title,intro,content,pubtime,user_id,user_nickname) values ('Jay','星晴','乘着风 游荡在蓝天边
一片云掉落在我面前
',1231242,1,'王五');

insert into tour_article (title,intro,content,pubtime,user_id,user_nickname) values ('范特西','爱在西元前','古巴比伦王颁布了汉谟拉比法典
刻在黑色的玄武岩
',1231242,1,'赵六');

insert into tour_article (title,intro,content,pubtime,user_id,user_nickname) values ('范特西','简单爱','说不上为什么 我变得很主动
若爱上一个人 什么都会值得去做
',1231242,1,'秦七');


insert into tour_article (title,intro,content,pubtime,user_id,user_nickname) values ('醒着做梦','时间有泪','这些年来 我们都曾犯了错
到了最后 只有过程没结果
',1231242,2,'钱八');

insert into tour_article (title,intro,content,pubtime,user_id,user_nickname) values ('醒着做梦','我醒着做梦','看你熟睡时的笑容 以为爱很单纯
以为就凭那些浪漫傻事 过一生也够用
',1231242,2,'孙九');

insert into tour_comment (content,post_date,user_nickname) values
('你好棒棒哟',151389841,'小梦梦'),
('你好棒棒哟~',151389841,'小梦梦'),
('你好棒棒哟!',151389841,'小梦梦'),
('哈哈哈',151389841,'小梦梦'),
('妙妙妙',151389841,'小梦梦'),
('你好棒棒哟',151389841,'小梦梦');


insert into info (content,time,user_nickname) values
('asdasda',151389841,'小明'),
('asdasda',151389841,'小明'),
('asdasda',151389841,'小明'),
('asdasda',151389841,'小明'),
('asdasda',151389841,'小明'),
('asdasda',151389841,'小明'),
('asdasda',151389841,'小明');

insert into tour_article (title,intro,content,pubtime,user_id,user_nickname,comment_num) values
('坐着火车去西藏，沿途的景色有多美','西藏，千山之巅，万水之源，
  雄浑大气，激荡心灵。这里有壮观的山川河流，这里有多彩的民族文化，
  这里有浓厚的宗教情怀，这里有朴实的雪域儿女。到拉萨的第二天，天
  下着小雨，坐火车到那曲，全程300多公里，用时大约三个半小时左右。',
  '坐火车还有个最大的好处，就是车厢里面有供氧设备，不用担心高反。
  这一路上有卧铺都舍不得躺一会，就趴在窗口看风景。尽管去那曲的时候下雨
  ，但阴云密布的感觉一样迷人。雨中的拉萨火车站广场。坐上火车去拉萨，
  透过车窗，尽情的欣赏窗外的大美风光。这次去西藏，特意去感受了一下从火车
  上看西藏的别样感觉。',989525561,150,'云池',10 ),
('【神农架】快放开那只川金丝猴，让我来！','在神农坛参加完每年一度的炎帝祭祀大典，
  天空突然下起了雨，我不由心中嘀咕，难道祭祀大典还有祈雨的功能不成？神农顶常年多雨
  ，可今日这雨下得实在不妙，因为大雨很可能会影响我们的下一个行程，大家期盼已久的特别
  活动——探访神农架的野生川金丝猴。','金丝猴是和恐龙同时代的原始物种，和大熊猫一样珍
  贵的国家一级保护动物。在神农架的大山里，生活着1300余只川金丝猴，野生猴群栖息在高
  山密林中，以浆果、竹笋、苔藓为食， 是典型的森林树栖动物。金丝猴生性胆小、机警，生活方
  式是沿着循环圈不停地迁徙，正常情况下每天推进约一公里，一边行走，一边觅食、游玩。因此，
  虽然同在一片蓝天下，神农架的普通游客是几乎是没什么机会和金丝猴偶
  遇的。',989525561,151,'蓝天',10 );