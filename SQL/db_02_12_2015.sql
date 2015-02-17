-- MySQL Script generated by MySQL Workbench
-- Mon Feb 16 20:41:04 2015
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema SchedulerProDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema SchedulerProDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `SchedulerProDB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `SchedulerProDB` ;

-- -----------------------------------------------------
-- Table `SchedulerProDB`.`Schedule`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`Schedule` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`Schedule` (
  `sch_id` INT NOT NULL AUTO_INCREMENT,
  `sch_rec_id` INT NULL,
  `sch_date` DATE NULL,
  `sch_dt_start` DATETIME NULL,
  `sch_dt_end` DATETIME NULL,
  `sch_setup` VARCHAR(100) NULL,
  `sch_attendance` INT NULL,
  `sch_res_id` INT NULL,
  `sch_inactive` TINYINT(1) NULL,
  `sch_ts` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sch_uid` VARCHAR(50) NULL,
  PRIMARY KEY (`sch_id`),
  UNIQUE INDEX `schedule_id_UNIQUE` (`sch_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`ScheduleCategory`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`ScheduleCategory` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`ScheduleCategory` (
  `schedcat_id` INT NOT NULL AUTO_INCREMENT,
  `schedcat_name` VARCHAR(100) NULL,
  PRIMARY KEY (`schedcat_id`),
  UNIQUE INDEX `schedcat_id_UNIQUE` (`schedcat_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`ScheduleRecurring`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`ScheduleRecurring` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`ScheduleRecurring` (
  `sch_rec_id` INT NOT NULL AUTO_INCREMENT,
  `sch_rec_name` VARCHAR(45) NULL,
  `sch_rec_description` VARCHAR(200) NULL,
  `sch_rec_schedcat_id` INT NULL,
  `sch_rec_contact_id` INT NULL,
  `sch_rec_cost` VARCHAR(45) NULL,
  PRIMARY KEY (`sch_rec_id`),
  UNIQUE INDEX `sch_rec_id_UNIQUE` (`sch_rec_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`Resources`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`Resources` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`Resources` (
  `res_id` INT NOT NULL AUTO_INCREMENT,
  `res_name` VARCHAR(45) NULL,
  `res_capacity` INT NULL,
  `res_description` VARCHAR(100) NULL,
  `res_features` VARCHAR(100) NULL,
  `res_alt_id` VARCHAR(45) NULL,
  `res_type_id` INT NULL,
  `res_inactive` TINYINT(1) NULL,
  PRIMARY KEY (`res_id`),
  UNIQUE INDEX `res_id_UNIQUE` (`res_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`ResourceStatus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`ResourceStatus` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`ResourceStatus` (
  `res_st_id` INT NOT NULL AUTO_INCREMENT,
  `res_st_res_id` INT NULL,
  `res_st_rst_id` INT NULL,
  `res_st_description` VARCHAR(500) NULL,
  `res_st_datestamp` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `res_st_user_id` INT NULL,
  PRIMARY KEY (`res_st_id`),
  UNIQUE INDEX `res_st_id_UNIQUE` (`res_st_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`ResourceStatusType`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`ResourceStatusType` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`ResourceStatusType` (
  `rst_id` INT NOT NULL AUTO_INCREMENT,
  `rst_name` VARCHAR(45) NULL,
  PRIMARY KEY (`rst_id`),
  UNIQUE INDEX `rst_id_UNIQUE` (`rst_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`ResourceType`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`ResourceType` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`ResourceType` (
  `rt_id` INT NOT NULL AUTO_INCREMENT,
  `rt_name` VARCHAR(45) NULL,
  PRIMARY KEY (`rt_id`),
  UNIQUE INDEX `rt_id_UNIQUE` (`rt_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`Contact`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`Contact` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`Contact` (
  `con_id` INT NOT NULL AUTO_INCREMENT,
  `con_typ_id` INT NULL,
  `con_first_name` VARCHAR(45) NULL,
  `con_last_name` VARCHAR(45) NULL,
  `con_main_phone` VARCHAR(45) NULL,
  `con_sec_phone` VARCHAR(45) NULL,
  `con_email` VARCHAR(45) NULL,
  `con_street` VARCHAR(45) NULL,
  `con_city` VARCHAR(45) NULL,
  `con_state` VARCHAR(45) NULL,
  `con_zip` VARCHAR(45) NULL,
  PRIMARY KEY (`con_id`),
  UNIQUE INDEX `con_id_UNIQUE` (`con_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`ContactType`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`ContactType` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`ContactType` (
  `con_typ_id` INT NOT NULL AUTO_INCREMENT,
  `con_typ_name` VARCHAR(45) NULL,
  PRIMARY KEY (`con_typ_id`),
  UNIQUE INDEX `con_typ_id_UNIQUE` (`con_typ_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SchedulerProDB`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SchedulerProDB`.`Users` ;

CREATE TABLE IF NOT EXISTS `SchedulerProDB`.`Users` (
  `users_id` INT NOT NULL AUTO_INCREMENT,
  `users_username` VARCHAR(255) NOT NULL,
  `users_password` VARCHAR(60) NOT NULL,
  `users_type` INT NOT NULL,
  `users_email` VARCHAR(255) NOT NULL,
  `users_active` VARCHAR(255) NOT NULL,
  `users_resetToken` VARCHAR(255) NULL DEFAULT NULL,
  `users_resetComplete` VARCHAR(3) NULL DEFAULT 'No',
  PRIMARY KEY (`users_id`),
  UNIQUE INDEX `id_UNIQUE` (`users_id` ASC),
  UNIQUE INDEX `Users_username_UNIQUE` (`users_username` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
