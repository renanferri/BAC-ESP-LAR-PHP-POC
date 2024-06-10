<?php
// construct property promotion

class FirstService
{
    public function execute()
    {
        return 'firt service running';
    }
}

// old
class SecondService
{
    private $service;

    public function __construct(FirstService $service)
    {
        $this->service = $service;
    }

    public function handle()
    {
        return $this->service->execute();
    }
}

// new
class ThirdService
{
    public function __construct(
        private FirstService $service
    )
    {}

    public function handle()
    {
        return $this->service->execute();
    }
}

// $secondService = new SecondService(new FirstService());
// echo $secondService->handle();

$thirdService = new ThirdService(new FirstService());
echo $thirdService->handle();


