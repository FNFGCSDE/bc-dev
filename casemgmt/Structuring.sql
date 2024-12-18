SELECT `id_txnset`, ANY_VALUE(id_txn), COUNT(*) as `total`
FROM casemgmt.txns
WHERE
  (amt_cents > 899999)
AND
  (amt_cents < 1000000)
AND
  (category = 'Cash')
AND
  (txn_type = 'CREDIT')
GROUP BY
  `id_txnset`
;
