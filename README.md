# Data Structure and Algorithm

This repository contains exercises and examples for learning Data structure and algorithm.

## Getting Started

You may follow instructions, if you want to run code using docker.

## Prerequisites

- Docker installed on your machine
- Basic knowledge of command line interface

1. Clone the repository:

   ```sh
   git clone https://github.com/abdulmajidcse/data-structure-and-algorithm
   cd data-structure-and-algorithm
   ```

2. Build the Docker image:

   ```sh
   docker build -t data-structure-and-algorithm .
   ```

3. Run the Docker container:

   ```sh
   docker run --rm data-structure-and-algorithm
   ```

   You may run this command if you need mount from your local to container when your code will be updated.

   ```sh
   docker run -it --rm --name data-structure-and-algorithm -v "$(pwd):/app" -w /app data-structure-and-algorithm
   ```

   You may also run this command if you need to run a specific file.

   Only for PHP.

   ```sh
   docker run -it --rm --name data-structure-and-algorithm -v "$(pwd):/app" -w /app data-structure-and-algorithm php test.php
   ```

   Only for Python

   ```sh
   docker run -it --rm --name data-structure-and-algorithm -v "$(pwd):/app" -w /app data-structure-and-algorithm python3 test.py
   ```

   Only for NodeJS.

   ```sh
   docker run -it --rm --name data-structure-and-algorithm -v "$(pwd):/app" -w /app data-structure-and-algorithm node test.js
   ```

   Note: You may run these above comands in your powershell if you get an error in your other terminal (e.g., Git Bash).
