<?php
// Heading
$_['heading_title']    = 'Скидка за Лайк';

// Text
$_['text_total']       = 'Общая сумма заказа';
$_['text_success']     = 'Настройки модуля обновлены!';

// Entry
$_['entry_status']     = 'Статус:';
$_['entry_discount_value'] = 'Величина скидки (%):';
$_['entry_sort_order'] = 'Порядок сортировки:';

$_['entry_discount_lifetime'] = 'Время действия скидки:';
$_['entry_discount_lifetime_help'] = 'В секундах. Например, для времени действия в 1 неделю нужно написать 604800 (60*60*24*7). 0 означает отсутствие ограничения.';

$_['entry_discount_method'] = 'Метод расчета скидки:';
$_['entry_discount_method_help'] = 'По умолчанию, скидка считается от основной цены товара и <u>суммируется с действующей акцией</u>.<br/>В случае, если основная цена товара - фиктивная, то лучше сменить метод расчета на "Скидка с акции" - значение основной цены будет игнорироваться при вычислении скидки.';

$_['entry_discount_active_mark'] = 'Признак цены со скидкой';
$_['entry_discount_active_mark_help'] = 'Будет добавляться рядом со скидкой в карточке товара, если она дана за лайк';
$_['entry_default_discount_active_mark'] = '(скидка за лайк)';

// Error
$_['error_permission'] = 'У Вас нет прав для управления этим модулем!';
?>