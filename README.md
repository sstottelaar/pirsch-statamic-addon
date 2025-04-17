# Pirsch Statamic Addon

> Seamlessly integrate Pirsch Analytics into your Statamic site with a focus on privacy and server-side tracking.

## Features

- **Server-Side Tracking:** Integrates Pirsch easily without client-side Javascript for basic pageview tracking. This enhances user privacy and prevents adblockers from interfering.
- **Automatic Filtering:** Automatically excludes visits from your local development environment (`localhost`, `127.0.0.1`) from being tracked. (Configurable)
- **Antlers Tags:** Provides simple Antlers tags for easy custom event tracking directly from your templates.

## Requirements

- Statamic v4
- PHP 8.1+
- A Pirsch Analytics account

## Installation

1.  Install the addon using Composer:

    ```bash
    composer require sstottelaar/pirsch
    ```

2.  **(Optional)** Publish the configuration file if you need to customize default settings (like excluded domains):
    ```bash
    php please vendor:publish --tag="pirsch-config"
    ```
    This creates a `config/pirsch.php` file. Using `.env` variables is generally preferred for credentials.

## Configuration

1.  **Get your Pirsch Access Key:**

    - Log in to your Pirsch dashboard.
    - Go to **Settings** -> **Integration**.
    - Ensure the correct domain/website is selected (top right).
    - Scroll down to the "Clients" section and click **Add Client**.
    - Select the **Access Key (write-only)** type.
    - Give the client a descriptive name (e.g., "Statamic Production Site").
    - Copy the generated **Client Secret** (this is your token).

2.  **Add the Token to your Environment:**
    Open your `.env` file and add the copied token:
    ```dotenv
    PIRSCH_TOKEN=pa_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    ```
    - **Important:** Make sure to add this variable to your production `.env` file as well.
    - **Tip:** Leave the `PIRSCH_TOKEN` variable empty or unset in non-production environments (like local or staging) to automatically disable tracking there.

## How it Works

Once installed and configured with a valid `PIRSCH_TOKEN`, the addon automatically starts tracking pageviews on every request using Pirsch's server-side tracking capabilities. No further setup is needed for basic tracking.

## Usage

### Basic Pageview Tracking

Automatic, no action required after configuration.

<!-- ### Event Tracking (Antlers)

Use the provided Antlers tag in your templates to track custom events:

```antlers
{{ pirsch:event name="Button Clicked" }}

{{# Example with metadata #}}
{{ pirsch:event name="Form Submitted" meta='{"form_id": "contact", "source": "footer"}' }}
```

_(Detailed documentation for Antlers tags and potential PHP usage to be added)_ -->

## Roadmap

- [ ] Display Pirsch statistics directly in the Statamic Control Panel
- [ ] Add a convenient link in the CP to navigate to your Pirsch Dashboard
- [ ] Enhance event tracking capabilities (e.g., duration)

## Issues

If you experience any issues, please make a GitHub issue or contact me at [sjoerdstottelaar.nl](https://www.sjoerdstottelaar.nl)

## Contributing

Contributions are welcome! Please create an issue or submit a pull request.

## License

This project is licensed under the MIT License.
