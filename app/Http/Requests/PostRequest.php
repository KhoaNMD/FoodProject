<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required",
            "describe" => "required",
            "phone" => "required|regex:/^[0-9]{10,11}+$/",
            "email" => "required|unique:tbl_post,email",
            "province" => "required",
            "district" => "required",
            "address" => "required",
            "capacity" => "required",
            "category_id" => "required",
            "start_time" => "required",
            "end_time" => "required|after:start_time",
            "min_price" => "required",
            "max_price" => "required",
        ];
    }

    public function messages(){
      return [
          "title.required" => "Vui lòng nhập tên nhà hàng",
          "describe.required" => "Vui lòng nhập mô tả ",
          "phone.required" => "Vui lòng nhập số điện thoại ",
          "phone.regex" => "Số điện thoại không hợp lệ",
          "email.required" => "Vui lòng nhập email ",
          "email.unique" => "Email đã được đăng ký",
          "province.required" => "Vui lòng chọn tỉnh ",
          "district.required" => "Vui lòng chọn huyện ",
          "address.required" => "Vui lòng nhập địa chỉ ",
          "capacity.required" => "Vui lòng nhập sức chứa ",
          "category_id.required" => "Vui lòng chọn loại hình ",
          "start_time.required" => "Vui lòng nhập giờ mở cửa ",
          "end_time.required" => "Vui lòng nhập giờ đóng cửa ",
          "end_time.after" => "Giờ đóng cửa phải lớn hơn giờ mở cửa",
          "min_price.required" => "Vui lòng nhập giá thấp nhất ",
          "max_price.required" => "Vui lòng nhập giá cao nhất ",
      ];
    }

}
