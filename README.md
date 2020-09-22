# Logging Error requests to Rollbar Dashboard

DreamFactory 4.4.0 and newer supports a very simple solution for collecting all errors in one place.

## Configuration

To configure the error collecting, you need to go to the file
with the environment variables and add the following variable:

- `ROLLBAR_TOKEN` - Rollbar access token. It will turn on Rollbar Logging.
