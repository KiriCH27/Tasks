USE [Training]
SELECT [history_name], [end], course_id,[status] 
FROM [dbo].[History]
WHERE course_id = 1 and [status] = 1 and [end] < '01.10.2017';