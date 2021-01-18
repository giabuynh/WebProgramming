use JIMMYCHOO;

/***** PROCEDURES *****/
delimiter \\
create procedure ADD_ACCOUNT(
	fn varchar(30),
    e varchar(40),
    p varchar(20),
    a varchar(100),
    ph char(10),
    ad boolean
)
begin
	declare cnt int;
	select count(*) into cnt from ACCOUNTS where email = e;
    if (cnt = 0) then
		insert into ACCOUNTS values(fn, e, p, a, ph, ad);
	end if;
    commit;
end\\

/***** FUNCTIONS *****/
