# Use a base image that supports PHP
FROM debian:bullseye-slim

# Install dependencies and PHP 8.4
RUN apt-get update && apt-get install -y \
    curl \
    gnupg \
    lsb-release \
    ca-certificates \
    && curl -sSL https://packages.sury.org/php/README.txt | bash - && \
    apt-get update && apt-get install -y php8.4 php8.4-cli && \
    rm -rf /var/lib/apt/lists/*

# Set the working directory in the container
WORKDIR /app

# Copy the current directory contents into the container
COPY . .
