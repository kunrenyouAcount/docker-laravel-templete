<?php

namespace Tests\Unit\User;

use App\Models\User;
use App\Services\UserFetchService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use function PHPUnit\Framework\assertSame;

class UserFetchServiceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function 正常系テスト()
    {
        $user = User::factory()->create();

        $service = new UserFetchService();
        $fetchUser = $service->handle($user->id);
        assertSame($user->id, $fetchUser->id);
    }

    /** @test */
    public function 指定したUserのidが存在しない場合には例外が投げられる()
    {
        $this->expectException(ModelNotFoundException::class);
        $service = new UserFetchService();
        $service->handle(-1);
    }
}
