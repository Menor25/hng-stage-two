# Task API Documentation

## Introduction

This API allows you to manage person (user). It provides CRUD (Create, Read, Update, Delete) operations for user.

Base URL: `http://your-api-domain/api`

## Endpoints

### Create a User

- **URL:** `/`
- **Method:** POST
- **Request Format:**

```json```
{
    "name": "Full Name",
}

- **Response Format:**
{
    "id": 1,
    "name": "Full Name",
    "created_at": "2023-09-13T12:00:00Z",
    "updated_at": "2023-09-13T12:00:00Z"
}

### Get a User
- **URL:** `/user_id`
- **Method:** GET
- **Response Format:**

```Json```
{
    "data": [
        {
            "id": 1,
            "name": "Theo Menor",
            "created_at": "2023-09-12T20:47:09.000000Z",
            "updated_at": "2023-09-12T20:52:49.000000Z"
        }
    ]
}

### Update a User

- **URL:** `/user_id`
- **Method:** PATCH
- **Request Format:**

```json```
{
    "name": "Theo Menors",
}

- **Response Format:**
{
    "data": [
        {
            "id": 1,
            "name": "Theo Menors",
            "created_at": "2023-09-12T20:47:09.000000Z",
            "updated_at": "2023-09-12T20:52:49.000000Z"
        }
    ]
}

### Delete a User

- **URL:** `/user_id`
- **Method:** DELETE
- **Response Format:**
{
    "data": "deleted"
}

## Setting up locally
- Clone the API repository from github
- Configure your enviornment variables including the datases in the .env file
- Run database migration `php artisan migrate`
- Start the development server `php artisan serve`
- Access the api at `http://127.0.0.1~8000/api`
