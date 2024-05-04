# Lomodoro - Pomodoro Timer REST API

Lomodoro is a Pomodoro timer application backend built using Laravel 10, MySQL, Laravel Sanctum, and Redis. It allows users to create accounts and configure multiple timer settings for work and breaks.

## Features

- User Authentication: Users can create accounts and authenticate using Laravel Sanctum.
- Timer Configuration: Users can create and customize multiple timer configurations according to their work and break preferences.
- Real-time Events: Utilizes Laravel Broadcasting to handle real-time events like notifications and controlling the current timer.

## Requirements

- PHP >= 8.2
- Laravel >= 11.0
- MySQL
- Redis

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/markagamez/Lomodoro.git
   ```

2. Navigate into the project directory:
   ```bash
   cd lomodoro
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Set up environment variables:
   - Copy the `.env.example` file to `.env` and configure it according to your environment.

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

- Register a new user account or login with existing credentials.
- Create timer configurations specifying work and break lengths.
- Start, pause, resume, or cancel timers as needed.
- Receive real-time notifications for timer events.

## Contributing

Contributions are welcome! If you have any suggestions, improvements, or feature requests, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
