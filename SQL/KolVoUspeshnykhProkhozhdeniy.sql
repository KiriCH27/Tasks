USE [Training]
select [course_name], count(history_name) as Quantity
from [dbo].[History],[dbo].[Course]
Where [status] = 1 AND [end] < '01.10.2017' AND History.course_id = Course.course_id 
Group By [course_name]