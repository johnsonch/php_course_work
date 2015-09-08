CREATE DATABASE Blog;

CREATE TABLE Blog.Posts
(
ID int,
title varchar(255),
article text,
author_id int
);

CREATE TABLE Blog.Authors
(
ID int,
firstName varchar(255),
lastName varchar(255),
email varchar(244)
)