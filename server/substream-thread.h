/*
 * Copyright 2010-2020 Bluecherry, LLC
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

#ifndef __SUBSTREAM_THREAD_H
class substream
{
public:
	explicit substream();
	void run(struct bc_record *r);
	void stop();
private:
	/* struct bc_record *rec; */
	bool exit_flag;
};
#define __SUBSTREAM_THREAD_H

#endif

