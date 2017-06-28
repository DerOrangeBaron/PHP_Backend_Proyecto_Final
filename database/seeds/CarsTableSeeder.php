<?php

use Illuminate\Database\Seeder;
use App\Car;
class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::Create([
            'year'          => 2017,
            'model_id'      => 1,
            'description'   => 'The A4 is swift, silent, and sporty—and one of the best in its class. The exterior is understated; its interior handsome and sophisticated with pleasing materials. Handling is stable, though steering feels light at highway speeds. Its turbocharged inline-four makes 252 hp (or 190 in the fuel-saving A4 Ultra) and pairs with a six-speed manual or seven-speed automatic. Front-wheel drive, Apple CarPlay and Android Auto are standard; all-wheel drive and a 19-speaker audio system are optional.',
            'photo'         => '../img/audi_1.jpg',
            'price'         => 80000,
        ]);
        Car::Create([
            'year'          => 2016,
            'model_id'      => 2,
            'description'   => 'Sharply creased bodywork and a refined cabin make the A6 a well-tailored option for discerning drivers. The base powertrain is a 252-hp 2.0-liter turbo four, seven-speed automatic, and front-drive; all-wheel drive with an eight-speed automatic is optional. A 333-hp supercharged 3.0-liter V-6 with all-wheel drive is also available. A 7.0-inch infotainment system is standard; tech such as Apple CarPlay, Android Auto, adaptive cruise control, and automated emergency braking are optional.',
            'photo'         => '../img/audi_2.jpg',
            'price'         => 35000,
        ]);
        Car::Create([
            'year'          => 2015,
            'model_id'      => 2,
            'description'   => 'Sharply creased bodywork and a refined cabin make the A6 a well-tailored option for discerning drivers. The base powertrain is a 252-hp 2.0-liter turbo four, seven-speed automatic, and front-drive; all-wheel drive with an eight-speed automatic is optional. A 333-hp supercharged 3.0-liter V-6 with all-wheel drive is also available. A 7.0-inch infotainment system is standard; tech such as Apple CarPlay, Android Auto, adaptive cruise control, and automated emergency braking are optional.',
            'photo'         => '../img/audi_2.jpg',
            'price'         => 65000,
        ]);
        Car::Create([
            'year'          => 2017,
            'model_id'      => 3,
            'description'   => 'Comfortable, quiet, and handsomely styled, the Audi Q5 provides the premium look and feel that crossover buyers crave. Driving all four wheels is a 252-hp turbo 2.0-liter four-cylinder and a seven-speed automatic. The cabin is well-finished, and atop its dash sits a 7.0-inch infotainment screen with Apple CarPlay and Android Auto; an 8.3-inch display is optional, as is the 12.3-inch driver-facing digital gauge cluster. All Q5s come with automated emergency braking and a power liftgate.',
            'photo'         => '../img/audi_1.jpg',
            'price'         => 60000,
        ]);
        Car::Create([
            'year'          => 2016,
            'model_id'      => 3,
            'description'   => 'Comfortable, quiet, and handsomely styled, the Audi Q5 provides the premium look and feel that crossover buyers crave. Driving all four wheels is a 252-hp turbo 2.0-liter four-cylinder and a seven-speed automatic. The cabin is well-finished, and atop its dash sits a 7.0-inch infotainment screen with Apple CarPlay and Android Auto; an 8.3-inch display is optional, as is the 12.3-inch driver-facing digital gauge cluster. All Q5s come with automated emergency braking and a power liftgate.',
            'photo'         => '../img/audi_1.jpg',
            'price'         => 40000,
        ]);
        Car::Create([
            'year'          => 2014,
            'model_id'      => 4,
            'description'   => 'The Mulsanne, with its understated elegance and phenomenal power, remains Bentley’s consummate saloon. It is the purest expression of luxury and performance. The ultimate representation of Bentley’s design, craft and engineering expertise, it is a car for those with vision and the power to bring their ideas to life. One whose elegant interior gives you time and space to make plans, and delivers the technology to make them happen. Whether you are behind the steering wheel, or being driven in unrivalled comfort.',
            'photo'         => '../img/bmw_m8.jpg',
            'price'         => 40000,
        ]);
        Car::Create([
            'year'          => 2017,
            'model_id'      => 4,
            'description'   => 'The Mulsanne, with its understated elegance and phenomenal power, remains Bentley’s consummate saloon. It is the purest expression of luxury and performance. The ultimate representation of Bentley’s design, craft and engineering expertise, it is a car for those with vision and the power to bring their ideas to life. One whose elegant interior gives you time and space to make plans, and delivers the technology to make them happen. Whether you are behind the steering wheel, or being driven in unrivalled comfort.',
            'photo'         => '../img/bmw_m8.jpg',
            'price'         => 70000,
        ]);
    }
}
