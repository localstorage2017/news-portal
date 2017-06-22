<?php

class CustomPaginator {

    public function __construct(Collection $collection)
    {
        $this->_total = $collection; // get total count
    }

    public function getLinkParameters($limit, $offset, $links)
    {
        // 1. Get current page
        if ($offset == 0) {
            $page = 1;
        } else {
            $page = $offset / $limit;
        }

        // 2. Get the last page number
        $last = ceil($this->_total / $limit);

        // 3. Calculate start of range for link printing
        if (($page - $links) > 0) {
            $start = $page - $links;
        } else {
            $start = 1;
        }

        // 4. Calculate end of range for link printing
        if (($page + $links) < $last) {
            $end = $page + $links;
        } else {
            $end = $last;
        }

        // 6. Return link parameters
        return [
            'limit' => $limit,
            'offset' => $offset,
            'links' => $links,
            'page' => $page,
            'start' => $start,
            'end' => $end,
            'last' => $last
        ];
    }
}
