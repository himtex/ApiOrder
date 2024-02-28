<?php

namespace App\Http\Services;

use App\Models\Order;

class OrderService
{
    public function getAll()
    {
        return Order::all();
    }

    public function getById($id)
    {
        return Order::findOrFail($id);
    }

    public function create($data)
    {
        return Order::create($data);
    }

    public function update(Order $order, $data)
    {
        $order->update($data);
        return $order;
    }

    public function delete(Order $order)
    {
        $order->delete();
        return $order;
    }
    public function getByStatus($status)
    {
        return Order::where('status', $status)->get();
    }

    public function getByDate($date)
    {
        return Order::whereDate('date', $date)->get();
    }

}
