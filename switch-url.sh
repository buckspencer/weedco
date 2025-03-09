#!/bin/bash

# Script to switch WordPress between ngrok and localhost URLs

if [ "$1" == "ngrok" ]; then
  echo "Switching to ngrok URL..."
  docker compose exec wordpress php /var/www/html/set-ngrok-url.php
elif [ "$1" == "local" ]; then
  echo "Switching to localhost URL..."
  docker compose exec wordpress php /var/www/html/set-local-url.php
else
  echo "Usage: ./switch-url.sh [ngrok|local]"
  echo "  ngrok: Switch to ngrok URL"
  echo "  local: Switch to localhost URL"
  exit 1
fi

echo "Done!" 