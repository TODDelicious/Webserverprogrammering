TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER Expiration_date_trigger BEFORE INSERT ON Innovices \nFOR EACH ROW SET NEW.Creation_date = IFNULL(NEW.Creation_date,NOW()),\nNEW.Expiration_date= TIMESTAMPADD(DAY,30,NEW.Creation_date)'
sql_modes=1073741824
definers='root@localhost'
client_cs_names='cp850'
connection_cl_names='cp850_general_ci'
db_cl_names='latin1_swedish_ci'
