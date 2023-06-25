<?php

namespace App\Http\Controllers\Admin\Post;


use App\Http\Requests\Post\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return view('admin.post.index');
    }
}
