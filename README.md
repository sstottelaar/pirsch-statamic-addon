# Pirsch Statamic Addon

> Seamlessly integrate Pirsch Analytics into your Statamic site with a focus on privacy and server-side tracking.

## Features

- **Server-Side Tracking:** integrates Pirsch easily without client-side Javascript for basic pageview tracking. This enhances user privacy and prevents adblockers from interfering
- **Automatic Filtering:** automatically excludes visits from your local development environment (configurable)
- **Antlers Tags:** provides simple Antlers tags for easy custom event tracking directly from your templates
- **Dashboard Link**: easy access to the Pirsch dashboard directly from the CP

## Requirements

- Statamic v5 / v6
- PHP 8.2+
- A Pirsch account

## Installation

1.  Install the addon using Composer:

    ```bash
    composer require sstottelaar/pirsch-statamic-addon
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

This addon handles pageviews server-side, eliminating the need for the Pirsch JavaScript snippet for core tracking. Manually add the snippet only if you specifically require client-side event tracking via JavaScript.

## Usage

### Basic Pageview Tracking

Automatic, no action required after configuration.

### Event Tracking (Antlers)

Use the provided Antlers tag in your templates to track custom events:

```antlers
{{ pirsch:event name="Contact form submitted" }}
```

Example with meta data:

```antlers
{{ pirsch:event name="Contact form submitted" \metadata='{"form": "contact"}' }}
```

> Never send Personally Identifiable Information (PII) or any sensitive user-specific data in the event metadata. You are responsible for ensuring compliance with privacy regulations (like GDPR). Use the metadata feature cautiously and at your own risk. For best practices, consult the [Pirsch Event Documentation](https://docs.pirsch.io/advanced/events).

### Dashboard link

Pirsch has the ability to create access links. To create an access link:

1. Log in to your Pirsch dashboard.
2. Go to **Settings** -> **Access**.
3. Scroll down to the **Access Links** section
4. Add a new access link and copy the link
5. Open your `.env` file and the follow:
   ```env
   PIRSCH_DASHBOARD_URL="https://xxxxx.pirsch.io/?access=xxxxxxxxxxxxxxxxxxxx"
   ```

## Roadmap

- [x] Enhance event tracking capabilities (e.g., duration)
- [x] Add a convenient link in the CP to navigate to your Pirsch Dashboard
- [ ] Display Pirsch statistics directly in the Statamic Control Panel

## Issues

If you experience any issues, please make a GitHub issue or contact me at [sjoerdstottelaar.nl](https://www.sjoerdstottelaar.nl)

## Contributing

Contributions are welcome! Please create an issue or submit a pull request.

## License

This project is licensed under the MIT License.
