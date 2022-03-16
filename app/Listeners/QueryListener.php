<?php

namespace App\Listeners;

use Illuminate\Database\Events\QueryExecuted;

/**
 * SQL 日志记录
 *
 * @Author tongfei
 * @DateTime 2022-03-15
 */
class QueryListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  QueryExecuted  $event
     * @return void
     */
    public function handle(QueryExecuted $event)
    {
        if (config('app.debug') === true) {
            foreach ($event->bindings as $key => $value) {
                if ($value instanceof \DateTimeInterface) {
                    $event->bindings[$key] = $value->format('Y-m-d H:i:s');
                } elseif (is_bool($value)) {
                    $event->bindings[$key] = (int)$value;
                }
            }

            $sql = str_replace('?', "'%s'", $event->sql);
            logger("[{$event->time}ms] " . vsprintf($sql, $event->bindings));
        }
    }
}
