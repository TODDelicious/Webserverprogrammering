TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `Expiration_date_trigger` BEFORE INSERT ON `innovices`\nFOR EACH ROW SET NEW.Creation_date = IFNULL(NEW.Creation_date,NOW()),\nNEW.Expiration_date= TIMESTAMPADD(DAY,30,NEW.Creation_date)'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
