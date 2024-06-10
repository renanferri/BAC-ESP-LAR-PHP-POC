<?php 

// New Inicializers

class FirstService
{
    public function execute()
    {
        return 'First Service running';
    }
}

// old
class SecondService
{
    public function __construct(
        private ?FirstService $service = null
    )
    {
        $this->service = $service ?? new FirstService();
    }

    public function handle()
    {
        return $this->service->execute();
    }
}

// new inicializers 
class ThirdService
{
    public function __construct(
        private FirstService $service = new FirstService
    )
    {}

    public function handle()
    {
        return $this->service->execute();
    }
}

// new inicializers method
class FourthService
{
    public function handle(FirstService $service = new FirstService)
    {
        return $service->execute();
    }
}

// $secondService = new SecondService();
// echo $secondService->handle();

// $thirdService = new ThirdService();
// echo $thirdService->handle();

$forthService = new FourthService();
echo $forthService->handle();