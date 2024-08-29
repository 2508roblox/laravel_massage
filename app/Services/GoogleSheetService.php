<?php

namespace App\Services;

use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSheetService
{
    private $spreadsheetId;
    private $sheetName;

    public function __construct()
    {
        // ID của Google Spreadsheet
        $this->spreadsheetId = '1uz-vC3zGxS7X6RSt_ib9RvAH7ya-MdXZ9j11kw5aZzs'; // Thay bằng ID thực tế của bạn
        $this->sheetName = 'demo'; // Tên sheet bạn muốn ghi dữ liệu vào
    }

    public function appendData(array $data)
    {
        // Đảm bảo dữ liệu được gửi là một mảng của mảng
        $values = [$data];

        // Gửi dữ liệu đến Google Sheets
        Sheets::spreadsheet($this->spreadsheetId)
            ->sheet($this->sheetName)
            ->append($values, 'RAW'); // Chỉ định 'RAW' trực tiếp, không cần đặt trong mảng
    }



    public function saveOrderToSheet($order, $address, $orderItems)
{
    foreach ($orderItems as $item) {
        $data = [
            $order->id,                  // Mã ĐH
            $order->user_id,             // Mã KH
            $order->grand_total,         // Tổng Tiền
            $order->payment_method,      // PTTT (Phương Thức Thanh Toán)
            $order->payment_status,      // TTTT (Trạng Thái Thanh Toán)
            $order->status,              // TT ĐH (Trạng Thái Đơn Hàng)
            $order->currency,            // Tiền Tệ
            $order->shipping_amount,     // Phí Ship
            $order->shipping_method,     // PT Giao (Phương Thức Giao)
            $order->notes,               // Ghi Chú
            $item->product_id,           // Mã SP (Mã Sản Phẩm)
            $item->product->name ?? 'Unknown',        // Tên SP (Tên Sản Phẩm)
            $item->unit_amount,       // Giá SP (Giá Sản Phẩm)
            $item->quantity,             // SL SP (Số Lượng Sản Phẩm)
            $address->first_name,        // Tên
            $address->last_name,         // Họ
            $address->phone,             // SĐT
            $address->street_address,    // Địa Chỉ
            $address->city,              // TP (Thành Phố)
            $address->state ?? 'N/A',             // Tỉnh
            $address->zip_code ?? 'N/A',          // Mã BC (Mã Bưu Chính)
            $order->created_at->format('Y-m-d H:i:s'), // Tạo Lúc
            $order->updated_at->format('Y-m-d H:i:s')  // Cập Nhật
        ];

        // Gọi phương thức appendData để thêm dòng vào Google Sheets
        $this->appendData($data);
    }
}



}
