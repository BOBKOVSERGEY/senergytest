<?php
/* Вариантов может быть множество, для данного конкретного случая можно извратиться на уровне MySQL, то есть создать триггеры, в первом при каждом добавлении новой записи, дублировать ее в другую таблицу.
В другой таблице создать триггер, чтобы при вставке новой записи он его добавлял и удалял все записи свыше 3 новостей. А на PHP уже обращаться непосредственно к этой таблице в которой 3 записи.
Другой вариант – это хранить эти 3 записи в файле в формате json и обращаться к файлу, чтобы не плодить триггеры и не мучать БД. */
