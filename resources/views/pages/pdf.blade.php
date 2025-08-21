{{--
<!DOCTYPE html>
<html>

<head>
    <title>Customer PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            margin: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Customer Information</h1>

    <table>
        <tr>
            <th>Name</th>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $customer->phone }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $customer->address }}</td>
        </tr>
    </table>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sita Pvt. Ltd. - Project Proposal</title>
    <style>
        /* Base styles for a professional, print-ready document. */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        :root {
            --primary-color: #007bff;
            /* A vibrant blue for a modern look */
            --secondary-color: #6c757d;
            /* A professional gray */
            --text-color: #343a40;
            --light-bg: #f8f9fa;
            --border-color: #e9ecef;
            --heading-font: 'Inter', sans-serif;
            --body-font: 'Inter', sans-serif;
        }

        body {
            font-family: var(--body-font);
            margin: 0;
            padding: 0;
            color: var(--text-color);
            line-height: 1.6;
            background-color: #fff;
            box-sizing: border-box;
        }

        /*
         * Main container is explicitly set to A4 dimensions (21cm x 29.7cm).
         * Padding is used to create margins inside this A4 space.
         * The 'box-sizing: border-box' ensures padding and borders are included
         * in the total width and height, preventing overflow.
         */
        .container {
            width: 21cm;
            min-height: 29.7cm;
            margin: auto;
            padding: 2.5cm 2cm;
            box-sizing: border-box;
            background-color: #fff;
        }

        /* * HEADER - Clean and modern design with logo and company details */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 20px;
            margin-bottom: 30px;
            border-bottom: 3px solid var(--primary-color);
        }

        .company-info {
            display: flex;
            align-items: center;
        }

        .company-logo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
            border: 2px solid var(--primary-color);
        }

        .company-details h1 {
            margin: 0;
            font-size: 2.2em;
            color: var(--primary-color);
            font-weight: 700;
        }

        .company-details p {
            margin: 0;
            font-size: 0.9em;
            color: var(--secondary-color);
        }

        .header-meta {
            text-align: right;
        }

        .header-meta h2 {
            font-size: 1.6em;
            color: var(--primary-color);
            margin: 0;
            font-weight: 600;
        }

        .header-meta p {
            margin: 5px 0 0;
            font-size: 0.9em;
            color: var(--secondary-color);
        }

        /* * SECTIONS - Consistent styling for all content blocks */
        .section {
            margin-bottom: 35px;
        }

        .section-title {
            font-family: var(--heading-font);
            font-size: 1.5em;
            color: var(--primary-color);
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 5px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        /* * TABLE STYLES - Clean and professional tables for data */
        .data-table,
        .customer-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95em;
        }

        .data-table th,
        .data-table td,
        .customer-table th,
        .customer-table td {
            border: 1px solid var(--border-color);
            padding: 12px;
            text-align: left;
        }

        .data-table th,
        .customer-table th {
            background-color: var(--light-bg);
            font-weight: 600;
        }

        .info-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .info-list li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 10px;
        }

        .info-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        .timeline-table th,
        .timeline-table td {
            border: 1px solid var(--border-color);
            padding: 12px;
            text-align: center;
        }

        .timeline-table th {
            background-color: var(--primary-color);
            color: #fff;
        }

        .timeline-table td:first-child {
            text-align: left;
            font-weight: 500;
            color: var(--primary-color);
        }

        .summary-box {
            width: 50%;
            margin-left: auto;
            margin-top: 25px;
            padding: 20px;
            background-color: var(--light-bg);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .summary-box h4 {
            font-size: 1.2em;
            margin-top: 0;
            margin-bottom: 10px;
            color: var(--primary-color);
            font-weight: 700;
        }

        .summary-box table {
            width: 100%;
            border-collapse: collapse;
        }

        .summary-box th,
        .summary-box td {
            padding: 8px 0;
            text-align: right;
            border-bottom: 1px dashed var(--border-color);
            font-size: 1em;
        }

        .summary-box th {
            font-weight: 500;
            color: #555;
        }

        .summary-box tr:last-child th,
        .summary-box tr:last-child td {
            font-size: 1.2em;
            font-weight: 700;
            color: var(--primary-color);
            border-bottom: none;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 0.8em;
            color: #999;
            padding-top: 20px;
            border-top: 1px dashed var(--border-color);
        }

        .signatures {
            display: flex;
            justify-content: space-between;
            margin-top: 60px;
        }

        .signature-block {
            width: 45%;
            text-align: center;
        }

        .signature-block .signature-line {
            width: 100%;
            border-bottom: 1px dashed #666;
            margin-bottom: 5px;
            height: 25px;
        }

        .signature-block p {
            margin: 0;
            font-size: 0.9em;
            color: #666;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- HEADER: Company and Document Details -->
        <div class="header">
            <div class="company-info">
                <img src="https://placehold.co/100x100/007bff/ffffff?text=LOGO" alt="Company Logo" class="company-logo">
                <div class="company-details">
                    <h1>Sita Pvt. Ltd.</h1>
                    <p>123 Company Lane, Jaipur, Rajasthan</p>
                    <p>Phone: +91-1234567890 | Email: info@sitapvtltd.com</p>
                </div>
            </div>
            <div class="header-meta">
                <h2>PROJECT PROPOSAL</h2>
                <p>Document No: **PRO-{{ date('Ymd') }}-001**</p>
                <p>Date: {{ date('Y-m-d') }}</p>
            </div>
        </div>

        <!-- CLIENT INFORMATION SECTION -->
        <div class="section">
            <h3 class="section-title">Client Information</h3>
            <table class="customer-table">
                <tr>
                    <th>Client Name</th>
                    <td>{{ $customer->name }}</td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td>{{ $customer->email }}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{ $customer->phone }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $customer->address }}</td>
                </tr>
            </table>
        </div>

        <!-- PROJECT SCOPE & DELIVERABLES -->
        <div class="section">
            <h3 class="section-title">Project Scope & Deliverables</h3>
            <p>Our commitment is to deliver a high-quality, scalable, and secure solution that meets your business
                objectives. This project includes:</p>
            <ul class="info-list">
                <li>Complete front-end and back-end development.</li>
                <li>Responsive design ensuring compatibility across all devices.</li>
                <li>Integration of all necessary APIs and third-party services.</li>
                <li>Comprehensive QA and testing to ensure a bug-free experience.</li>
                <li>Deployment and initial go-live support.</li>
            </ul>
        </div>

        <!-- TECHNOLOGY STACK -->
        <div class="section">
            <h3 class="section-title">Our Proposed Technology Stack</h3>
            <p>We leverage cutting-edge technologies to build a robust and future-proof solution:</p>
            <ul class="info-list">
                <li><strong>Backend:</strong> Laravel (PHP)</li>
                <li><strong>Frontend:</strong> React.js, Tailwind CSS</li>
                <li><strong>Database:</strong> MySQL</li>
                <li><strong>Deployment:</strong> AWS (Amazon Web Services)</li>
            </ul>
        </div>

        <!-- PROJECT MILESTONES -->
        <div class="section">
            <h3 class="section-title">Project Milestones & Timeline</h3>
            <table class="timeline-table">
                <thead>
                    <tr>
                        <th>Phase</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>Estimated Completion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Phase 1: Planning</td>
                        <td>Discovery & Project Blueprint</td>
                        <td>{{ date('Y-m-d') }}</td>
                        <td>{{ date('Y-m-d', strtotime('+7 days')) }}</td>
                    </tr>
                    <tr>
                        <td>Phase 2: Development</td>
                        <td>Front-end & Back-end Coding</td>
                        <td>{{ date('Y-m-d', strtotime('+8 days')) }}</td>
                        <td>{{ date('Y-m-d', strtotime('+30 days')) }}</td>
                    </tr>
                    <tr>
                        <td>Phase 3: QA & Testing</td>
                        <td>Quality Assurance and Bug Fixing</td>
                        <td>{{ date('Y-m-d', strtotime('+31 days')) }}</td>
                        <td>{{ date('Y-m-d', strtotime('+38 days')) }}</td>
                    </tr>
                    <tr>
                        <td>Phase 4: Launch</td>
                        <td>Deployment & Post-launch Support</td>
                        <td>{{ date('Y-m-d', strtotime('+39 days')) }}</td>
                        <td>{{ date('Y-m-d', strtotime('+45 days')) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- FINANCIAL SUMMARY -->
        <div class="section">
            <h3 class="section-title">Financial Summary</h3>
            <p>Our pricing is transparent and includes all services listed above.</p>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Service Description</th>
                        <th>Quantity</th>
                        <th>Unit Price (₹)</th>
                        <th>Total (₹)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Development (Total Cost)</td>
                        <td>1</td>
                        <td>45,000</td>
                        <td>45,000</td>
                    </tr>
                    <tr>
                        <td>Annual Hosting & Support</td>
                        <td>1</td>
                        <td>15,000</td>
                        <td>15,000</td>
                    </tr>
                </tbody>
            </table>

            <div class="summary-box">
                <h4>Total Investment</h4>
                <table>
                    <tr>
                        <th>Subtotal:</th>
                        <td>₹ 60,000</td>
                    </tr>
                    <tr>
                        <th>GST (18%):</th>
                        <td>₹ 10,800</td>
                    </tr>
                    <tr>
                        <th>Grand Total:</th>
                        <td>₹ 70,800</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- TERMS & CONDITIONS AND SIGNATURES -->
        <div class="section">
            <h3 class="section-title">Terms & Conditions</h3>
            <p style="font-size: 0.9em; color: #555;">
                This proposal is valid for 30 days from the date of issue. Payments are due according to the agreed-upon
                schedule. All services are subject to our standard terms of service.
            </p>
        </div>

        <div class="signatures">
            <div class="signature-block">
                <div class="signature-line"></div>
                <p>For and on behalf of Sita Pvt. Ltd.</p>
            </div>
            <div class="signature-block">
                <div class="signature-line"></div>
                <p>Client Signature</p>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p>&copy; 2024 Sita Pvt. Ltd. All rights reserved. | Powered by Code & Creativity</p>
        </div>
    </div>
</body>

</html>