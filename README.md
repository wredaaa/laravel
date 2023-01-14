# Query Test

1. Recapitulation of number of accounts owned by every customer.
```
select customer.*, count(account.acc_number) as recap_acc 
from customer
inner join account on customer.cust_id = account.acc_owner
group by cust_id
```

2. All transactions created by John Michael sorted by account number and transaction date

```
select CONCAT(customer.cust_firstname, ' ', customer.cust_lastname) as full_name, account.acc_number, transaction.trs_date, transaction.trs_amount, transaction.trs_type  
from customer
inner join account on customer.cust_id = account.acc_owner
inner join `transaction` on account.acc_number = transaction.trs_from_account
where CONCAT(customer.cust_firstname, ' ', customer.cust_lastname) = 'John Michael'
order by account.acc_number asc, transaction.trs_date
```

# Laravel test

`specification` for laravel 9.*:
  PHP ^8.0


1. Copy .env.example and rename .env
2. Setup config database in .env 
3. run `php artisan migrate` for create table users
4. run `php artisan db:seed` for add user
5. run `npm install`
6. run `php serve` & run `npm dev`
