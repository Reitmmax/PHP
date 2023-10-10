SELECT firstName, lastName, line1, line2, city, state, zipCode
FROM customers, addresses
WHERE lastName LIKE 'sherwood'