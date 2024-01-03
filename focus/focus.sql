-- 7. Write a query that lists FIRST_NAME, LAST_NAME from the STUDENTS table and the average of the PERCENT column from the GRADES table. Both tables contain STUDENT_ID. Only match records where the GRADELEVEL column is 9, 10, 11, or 12. *

SELECT 
    s.FIRST_NAME,
    s.LAST_NAME,
    AVG(g.PERCENT) AS average_percent
FROM 
    STUDENTS s
JOIN 
    GRADES g ON s.STUDENT_ID = g.STUDENT_ID
WHERE 
    g.GRADELEVEL IN (9, 10, 11, 12)
GROUP BY 
    s.STUDENT_ID, s.FIRST_NAME, s.LAST_NAME;

-- 10. Table `invoices` has a primary key integer column `id` and a varchar column `title`. Table `invoice_allocations` has a column `invoice_id` that relates to the `invoices` table, has a numeric column `amount`, and has an integer column `paid`. Write a select query that outputs the invoice ID, invoice title, and sum of the invoice allocation amounts for each invoice where the allocation is paid *

SELECT 
    i.id AS InvoiceID, 
    i.title AS Title, 
    SUM(ia.amount) AS TotalAmount
FROM 
    invoices i
INNER JOIN 
    invoice_allocations ia ON i.id = ia.invoice_id
WHERE 
    ia.paid = 1
GROUP BY 
    i.id, i.title;