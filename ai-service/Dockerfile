# Use official Python image
FROM python:3.11-slim

# Set working directory inside container
WORKDIR /app

# Install system dependencies (if needed, e.g., gcc for some pip packages)
RUN apt-get update && apt-get install -y \
    build-essential \
    && rm -rf /var/lib/apt/lists/*

# Copy dependency list
COPY requirements.txt .

# Install Python dependencies
RUN pip install --no-cache-dir -r requirements.txt

# Copy the rest of your app code
COPY . .

# Expose Flask's default port
EXPOSE 5000

# Run the app (adjust if you use Flask CLI or other runners)
CMD ["python", "app.py"]
